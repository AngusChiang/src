<?php
namespace App\Http\Controllers\Rocket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function listAll(Request $request)
    {
        return '{"update":[],"remove":[],"success":true}';
    }
}
