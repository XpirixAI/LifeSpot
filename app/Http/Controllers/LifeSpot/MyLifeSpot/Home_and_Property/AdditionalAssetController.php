<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property;

use App\Http\Controllers\Controller;
use App\Models\AdditionalAsset;
use App\Models\Asset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdditionalAssetController extends Controller
{
    public function DestroyMultiImage(AdditionalAsset $additionalAsset)
    {
        // unlink($asset->multi_image);
        $additionalAsset->delete();
        return redirect('/mylifespot/property/asset');
    }
}



