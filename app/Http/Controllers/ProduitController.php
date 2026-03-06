<?php
namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::with('categorie')->get();
        return view('produits.index', compact('produits'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|max:255',
        'description' => 'nullable',
        'prix' => 'required|numeric',
        'quantite' => 'required|integer|min:0',
        'urlImage' => 'nullable|string',
        'id_cat' => 'required|exists:categories,id',
    ]);
    
    Produit::create($validated);

    return redirect()->route('produits.index');
    
}

    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
    }

public function edit($id)
{
    $produit = Produit::findOrFail($id);
    $categories = Categorie::all();

    return view('produits.edit', compact('produit','categories'));
}


public function update(Request $request, $id)
{
    $produit = Produit::findOrFail($id);

    $produit->nom = $request->nom;
    $produit->description = $request->description;
    $produit->prix = $request->prix;
    $produit->quantite = $request->quantite;
    $produit->urlImage = $request->urlImage;
    $produit->id_cat = $request->id_cat;

    $produit->save();

    return redirect()->route('produits.index')->with('success','Produit modifié');
}

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé.');
    }
}