<?php
use App\Major;
use App\Student;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/majors', function (Request $req) {
    $majors = Major::where('code', '!=', null)
        ->orderBy('code', 'asc')
        ->get();
    return $majors;
});

Route::get('/majors/{id}', function ($id) {
    $major = Major::find($id);
    if ($major == null) {
        return response()->json([
            'error' => 'Resource not found'
        ], 404);
    }    
    return response()->json($major, 200);
});

Route::post('/majors', function (Request $req) {
    $validator = Validator::make($req->all(), [
        'name' => 'required|max:255',
        'code' => 'required|max:4',
    ]);
    
    if ($validator->fails()) {
        return response()->json([
            'error' => [
            'messages' => $validator->messages()
            ]
        ], 400);
    }

    $major = new Major;
    $major->code = $req->code;
    $major->name = $req->name;
    $major->save();
    return response()->json($major, 201);
});

Route::put('/majors/{id}', function (Request $req, $id) {
    $major = Major::find($id);
    $major->code = $req->code;
    $major->name = $req->name;
    $major->save();
    return response()->noContent();
});

Route::delete('/majors/{id}', function ($id) {
    $major = Major::find($id);
    if ($major == null) {
        return response()->json([
            'error' => [
                'message' => 'Major is not found'
            ]
        ], 404);
    }
    $defMajor = Major::where('code', '=', null)
        ->first();
    Student::where('major_id', '=', $id)
        ->update(array('major_id' => $defMajor->id));
    $major->delete();
    return response()->noContent();
});