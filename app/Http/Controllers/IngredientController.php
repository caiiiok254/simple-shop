<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * `Ingredient::all()` fetch all ingredients
         * `->jsonSerialize()` format them as a json list
         */
        return response(Ingredient::all()->jsonSerialize(), Response::HTTP_OK);
    }

}
