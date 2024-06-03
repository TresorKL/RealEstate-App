<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Seller;
use App\Models\Media;

class PropertyController extends Controller
{
    //

    public function addProperty(Request $request){

        $admin = $request->session()->get("admin");

        if($admin){

            $property=Property::create([
                'area'=>$request->area,
                'address'=>$request->address,
                'bedrooms'=> $request->bedrooms,
                'halls'=>$request->halls,
                'kitchens'=>$request->kitchens,
                'washrooms'=>$request->washrooms,
                'net_area'=>$request->net_area,
                'floor'=>$request->floor,
                'price'=>$request->price
            ]);


            $validatedData = $request->validate([
                'image-1' => 'required|image|mimes:jpeg,png,gif|max:2048', // Adjust validation rules as needed
                'image-2' => 'required|image|mimes:jpeg,png,gif|max:2048',
                'image-3' => 'required|image|mimes:jpeg,png,gif|max:2048',
                'image-4' => 'required|image|mimes:jpeg,png,gif|max:2048',
            ]);

            $images = [];
            for ($i = 1; $i <= 4; $i++) {
                $imageName = time() . $i . '.' . $request->file("image-$i")->getClientOriginalExtension();
                $request->file("image-$i")->storeAs('public/images', $imageName);

                $property->media()->create([
                    "media_url"=> $imageName,
              ]);
            }


            $seller = Seller::create([
                'full_name'=>$request->full_name,
                'phone_number'=>$request->phone_number,
                'email'=>$request->email,
                'property_id'=>$property->id
            ]);

            $property->seller()->save($seller); // Link seller using seller relationship

        }

        return redirect("/admin");
    }


    public function delete(Request $request,$id){
        Property::where('id','=',$id )->delete();
        return redirect("/admin");
    }

    public function filterProperties(Request $request)
    {
        $category = $request->category;
        $data = $request->value;

        $query = Property::with('seller', 'media'); // Eager load seller and media

        // Filter based on category and data
        if ($category) {
            switch ($category) {
                case 'area':
                    $query->where('area', $data); // Filter by exact area
                    break;
                case 'washrooms':
                case 'bedrooms':
                case 'halls':
                case 'kitchens':
                    $query->where($category, '>=', $data); // Filter by properties with at least this value
                    break;
                default:
                    // Handle invalid category (optional)
                    return response()->json(['message' => 'Invalid filter category'], 400);
            }
        }

        $filteredProperties = $query->get();
        $request->session()->put("properties", $filteredProperties);

        return redirect('/filter-properties');
    }

    public function getProperty(Request $request, $id){
        $property=Property::with('media', 'seller')->find($id);

        $twelve_moths= self::calculateMonthlyPayment($property->price, 20, 12);
        $twenty_four_moths= self::calculateMonthlyPayment($property->price, 30, 24);
        $request->session()->put("property", $property);
        $request->session()->put("twelve_moths", $twelve_moths);
        $request->session()->put("twenty_four_moths", $twenty_four_moths);

        return view("property");
    }

    public  static function calculateMonthlyPayment($totalPrice, $interestRate, $totalMonths){
    // Validate inputs (optional)
    if (!is_numeric($totalPrice) || !is_numeric($interestRate) || !is_numeric($totalMonths)) {
      throw new InvalidArgumentException('All inputs must be numeric');
    }

    // Calculate monthly interest rate

    $interest= ($interestRate*100)/$totalPrice;

    $full_amount=$totalPrice+$interest;

    $monthlyInterestRate = $full_amount / $totalMonths;

    // Calculate the monthly payment
    // $monthlyPayment = ($totalPrice * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$totalMonths));

    return round($monthlyInterestRate, 2); // Round to 2 decimal places
  }


}
