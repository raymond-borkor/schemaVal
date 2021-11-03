<?php

namespace App\Http\Controllers;

use DOMDocument;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValController extends Controller
{
    public function valx(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'xml_schema' => 'required',
            'xsd_file' => 'required|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        $xmlSchema = $request->file('xml_schema');
        $xsdFile = $request->file('xsd_file');
        $val = new DOMDocument();
        $val->load($xmlSchema);
        if (!$val->schemaValidate($xsdFile)){
            return response()->json([
                'Message' => 'Unable to validate, wrong parameters',
                'status' => false
            ], 404);
        }else{
            return response()->json([
                'Message' => 'Validation Successful',
                'status' => true
            ], 200);
        }

    }

    public function show_token()
    {
        echo csrf_token();
    }
}
