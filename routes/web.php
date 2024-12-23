<?php

use App\Models\Requisition;
use Illuminate\Support\Facades\Route;

Route::resource('requisitions', Requisition::class);
