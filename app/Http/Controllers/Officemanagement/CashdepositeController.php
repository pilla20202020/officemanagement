<?php
        namespace App\Http\Controllers\Officemanagement;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Officemanagement\Cashdeposite;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class CashdepositeController extends Controller
        {
           public function index(Request $request)
            {
                $data = Cashdeposite::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.cashdeposite.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.cashdeposite.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.cashdeposite.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.cashdeposite.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->cashdepositeName)]);
                Cashdeposite::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Cashdeposite Created Successfully.'], 200);
                }
                return redirect()->route('officemanagement.cashdeposite.index')->with('success','The Cashdeposite created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Cashdeposite::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.cashdeposite.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.cashdeposite.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Cashdeposite::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.cashdeposite.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.cashdeposite.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Cashdeposite::findOrFail($id);
                $request->request->add(['alias' => slugify($request->cashdepositeName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Cashdeposite updated Successfully.'], 200);
                }
                return redirect()->route('officemanagement.cashdeposite.index')->with('success','The Cashdeposite updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Cashdeposite::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Cashdeposite Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Cashdeposite::where('status', '<>', -1)->get();
                        return view("omis.officemanagement.cashdeposite.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.officemanagement.cashdeposite.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Cashdeposite::findOrFail($id);
                        return view("omis.officemanagement.cashdeposite.ajax.edit", compact('data'))->render();
                        break;
                    default:
                        return 'Not Found';
                }
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Cashdeposite::where('status', '<>', -1)->get();
                            $html = view("omis.officemanagement.cashdeposite.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Cashdeposite::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Cashdeposite Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Cashdeposite::findOrFail($id);
                            $html = view("omis.officemanagement.cashdeposite.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Cashdeposite::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Cashdeposite updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Cashdeposite::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Cashdeposite Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        