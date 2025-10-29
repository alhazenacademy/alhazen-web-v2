<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\TrialTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\InformationSource;
use App\Models\TrialClass;

class TrialClassController extends Controller
{
    public function index()
    {
        $programs = Program::select('id', 'name')->where('is_active', 1)->orderBy('sort_order')->get();
        $times = TrialTime::select('time')->where('is_active', 1)->orderBy('sort_order')->get();
        $sources = InformationSource::select('id','name')->where('is_active', 1)->orderBy('sort_order')->get();
        return view('pages.trial_class', compact('programs', 'times', 'sources'));
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'phone'         => ['required','regex:/^0[0-9]{8,13}$/'],
            'email'         => ['nullable','email'],

            'program_id'    => ['required','exists:programs,id'],
            'source_id'     => ['nullable','exists:information_sources,id'],

            'has_device'    => ['required','boolean'],

            'student_name'  => ['required','string','max:120'],
            'student_age'   => ['nullable','integer','min:3','max:18'],
            'parent_name'   => ['required','string','max:120'],

            'schedule_date' => ['required','date'],
            'schedule_time' => ['required','date_format:H:i'],
        ]);
        // simpan
        $trial = TrialClass::create($data);

        return response()->json([
            'ok' => true,
            'id' => $trial->id,
        ]);
    }
}
