<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with('category')->get()->toArray();

        return Inertia::render('Dashboard', [
            'clientes' => $clientes
        ]);
    }
}

/*
    "id" => 1
    "first_name" => "Myrna Gislason III"
    "last_name" => "Larissa Yundt"
    "email" => "kemmer.kathleen@example.net"
    "phone" => "+1-904-614-6074"
    "company_name" => null
    "notes" => "Commodi iusto culpa veniam deserunt asperiores. Et optio iure minima molestiae ducimus nostrum. Magnam nisi earum sed eius consequuntur."
    "created_at" => "2026-01-15T22:07:16.000000Z"
    "updated_at" => "2026-01-15T22:07:16.000000Z"
    "category_id" => 1
    "category" => array:5 [▼
      "id" => 1
      "name" => "Family"
      "color" => "#8AC850"
      "created_at" => "2026-01-15T22:07:15.000000Z"
      "updated_at" => "2026-01-15T22:07:15.000000Z"
    ]
*/