<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\TrialTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\InformationSource;
use App\Models\TrialClass;
use App\Models\LeadNumber;
use App\Models\SalesNumber;
use App\Jobs\SendTrialToExternalApi;


class TrialClassController extends Controller
{
    public function index()
    {
        $programs = Program::select('id', 'name')->where('is_active', true)->where('is_trial', true)->orderBy('sort_order')->get();
        $times = TrialTime::select('time')->where('is_active', 1)->orderBy('sort_order')->get();
        $sources = InformationSource::select('id', 'name')->where('is_active', 1)->orderBy('sort_order')->get();
        $salesPhone = optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
        return view('pages.trial_class', compact('programs', 'times', 'sources', 'salesPhone'));
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'phone' => ['required', 'regex:/^0[0-9]{8,13}$/'],
            'email' => ['nullable', 'email'],

            'program_id' => ['required', 'exists:programs,id'],
            'source_id' => ['nullable', 'exists:information_sources,id'],

            'has_device' => ['required', 'boolean'],

            'student_name' => ['required', 'string', 'max:120'],
            'student_age' => ['nullable', 'integer', 'min:3', 'max:18'],
            'parent_name' => ['required', 'string', 'max:120'],

            'schedule_date' => ['required', 'date'],
            'schedule_time' => ['required', 'date_format:H:i'],
        ]);
        $trial = TrialClass::create($data);

        SendTrialToExternalApi::dispatchSync($trial);

        return response()->json([
            'ok' => true,
        ]);
    }

    public function storeLead(Request $r)
    {
        $data = $r->validate([
            'phone_number' => ['required', 'string', 'max:20'],
            'source' => ['nullable', 'string', 'max:100'],
        ]);
        $lead = LeadNumber::create($data);

        return response()->json([
            'ok' => true,
        ]);
    }

    protected function mapTrialToEmailData(array $trial, ?array $program = null): array
    {
        $tz = 'Asia/Jakarta';

        $schedule = null;
        if (! empty($trial['schedule_date']) && ! empty($trial['schedule_time'])) {
            $schedule = Carbon::parse(
                $trial['schedule_date'].' '.$trial['schedule_time'],
                $tz
            );
        }

        return [
            'name'          => $trial['parent_name'] ?? '',                 // penerima = ortu
            'studentName'   => $trial['student_name'] ?? '',
            'grade'         => ! empty($trial['student_age'])? "Usia {$trial['student_age']} tahun": null,
            'className'     => $program['name'] ?? 'Trial Class',

            'date'          => $schedule? $schedule->translatedFormat('l, d M Y'): null,
            'time'          => $schedule? $schedule->format('H:i'): null,
            'timezone'      => 'WIB',

            'isOnline'      => true,                                        // ubah sesuai kebutuhanmu
            'joinUrl'       => null,                                        // isi jika sudah ada link
            'meetingId'     => null,
            'passcode'      => null,
            'googleCalendarUrl' => '#',

            'waUrl'         => 'https://wa.me/6281234567890',
            'waLabel'       => '+62 812-3456-7890',

            'homeUrl'       => url('/'),
            'heroUrl'       => asset('assets/kids/email/hero-email.png'),

            'location'      => 'Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, RT.5/RW.6, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840',
            'mapsUrl'       => 'https://maps.app.goo.gl/4oxbeBq5hcua9xw17',
            'orgAddress'    => 'Plaza Kaha, Jl. KH Abdullah Syafei No.21 C, RT.5/RW.6, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840',

            'privacyUrl'    => '#',
            'managePrefUrl' => '#',

            // tambahan (jaga-jaga)
            'phone'         => $trial['phone'] ?? null,
            'email'         => $trial['email'] ?? null,
        ];
    }

    /** PREVIEW: dummy data (tanpa kirim) */
    public function testTrialToEmail()
    {
        // Payload mengikuti schema `trial_classes`
        $trial = [
            'phone'         => '081234567890',
            'email'         => 'bunda@example.com',
            'program_id'    => 1,
            'source_id'     => null,
            'has_device'    => true,
            'student_name'  => 'Aisyah',
            'student_age'   => 10,
            'parent_name'   => 'Bunda Aisyah',
            'schedule_date' => now('Asia/Jakarta')->addDays(3)->format('Y-m-d'),
            'schedule_time' => '10:00:00',
        ];

        $program = [
            'name' => 'Trial Coding Anak – Scratch',
        ];

        // PENTING: panggil sebagai method di dalam class
        $data = $this->mapTrialToEmailData($trial, $program);

        // Render langsung file view email
        return view('emails.trial-confirmation', $data);
    }
}
