<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Helper;
use App\Models\User;
use App\Models\Student;
use App\Models\Slider;
use Yajra\DataTables\DataTables;
use App\Models\LeadingAndGovernor;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected function Validation($request)
    {
        $validator = Validator::make($request->all(), [
            'title'          => 'required|string|max:255',
            'description'    => 'nullable|string',
            'button_link'    => 'nullable',
            'video' => 'nullable|mimes:mp4,mov,avi,webm,mkv|max:200000',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            'youtube_video'  => 'nullable',
            'slier_for'      => 'required|integer',
            'serial'         => 'required|integer|min:1',
        ]);
        return $validator;
    }
    protected function fileUpload($request, $file_name, $folder)
    {
        if (!$request->hasFile($file_name)) {
            return null;
        }

        $file = $request->file($file_name);
        $extension = strtolower($file->getClientOriginalExtension());

        // UNIQUE filename (super safe)
        $filename = uniqid() . '_' . time() . '.' . $extension;

        // Make folder if not exists
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0777, true);
        }

        $full_path = public_path($folder . $filename);

        // Check if image
        $image_extensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        // Check if video
        $video_extensions = ['mp4', 'mov', 'avi', 'webm', 'mkv'];

        if (in_array($extension, $image_extensions)) {
            // image processing
            Image::read($file)
                ->resize(253, 158)
                ->save($full_path);
        } elseif (in_array($extension, $video_extensions)) {
            // store video normally
            $file->move(public_path($folder), $filename);
        } else {
            return null; // unsupported file
        }

        return $folder . $filename;  // return path
    }



    public function index()
    {
        return view('backend.pages.slider.index');
    }
    public function list(Request $request)
    {
        $data = Slider::query();
        $data->orderBy('created_at', 'desc');
        return Datatables::of($data)

            ->addColumn('action', function ($row) {
                $btn = '';
                if (Helper::hasRight('slider.edit')) {
                    $btn = $btn . '<a data-url="/admin/slider/' . $row->id . '/edit" class="edit_modal_show btn btn-sm btn-primary "><i class="fa-solid fa-pencil"></i></a>';
                }

                if (Helper::hasRight('slider.delete')) {
                    $btn = $btn . '<a class="ml-2 delete_btn btn btn-sm btn-danger " data-id="' . $row->id . '" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>';
                }
                return $btn;
            })
            ->rawColumns(['action'])->make(true);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $this->Validation($request);
        if ($validator->fails()) {
            return response()->json([
                'type' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $data = $request->except(['video', 'image']);
        if ($request->hasFile('image')) {
            $data['image'] = $this->fileUpload($request, 'image', '/uploads/slider/');
        }
        if ($request->hasFile('video')) {
            $data['video'] = $this->fileUpload($request, 'video', '/uploads/slider/');
        }

        $slider = Slider::create($data);
        return response()->json([
            'type' => 'success',
            'return' => $slider,
            'status' => 1,
            'message' => 'New Company Added Successfully !',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('backend.slider.edit');
        return 'ddd';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);
        return view('backend.pages.slider.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
