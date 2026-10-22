<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display the Home / Destinations page.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the Handcrafted Tours & Itineraries page.
     */
    public function tours()
    {
        return view('tours');
    }

    /**
     * Display the Luxury Stays & Boutique Accommodations page.
     */
    public function stays()
    {
        return view('stays');
    }

    /**
     * Display the Authentic Sri Lankan Experiences page.
     */
    public function experiences()
    {
        return view('experiences');
    }

    /**
     * Display the About Us & Story page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Handle custom trip planning requests.
     */
    public function planTrip(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'duration' => 'nullable|string',
            'style' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        // In a production setup, dispatch an email or store to database
        return response()->json([
            'success' => true,
            'message' => 'Thank you, ' . $validated['name'] . '! Your bespoke Sri Lanka travel request has been received. Our specialist will be in touch within 24 hours.',
        ]);
    }
}
