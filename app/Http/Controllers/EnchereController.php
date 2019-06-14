<?php

namespace App\Http\Controllers;

use App\Models\{Enchere, Image};
use Carbon\Carbon;
use Illuminate\Http\Request;

class EnchereController extends Controller
{
    public function index($image)
    {
        $image_enchere = Image::find($image)->first();
        $encheres = Enchere::where("image_id", $image)->orderBy("montant_enchere", "DESC")->first();

        return view("enchere.index", compact("image_enchere", "encheres"));
    }

    public function create($image)
    {
        return view("enchere.create", compact("image"));
    }

    public function store($image, Request $request)
    {
        $request->validate([
            "montant" => "required",
            "email" => "required"
        ]);

        $enchere = Enchere::where("image_id", $image)->orderBy("montant_enchere", "DESC")->first();

        $montant_enchere = floatval($request->montant);

        if ($montant_enchere > $enchere->montant_enchere) {
            Enchere::create([
                "image_id" => $image,
                "date_dernier_enchere" => Carbon::now(),
                "montant_enchere" => $montant_enchere,
                "email_enchereur" => $request->email
            ]);
        }
    }


}
