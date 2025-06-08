@extends('templete')

@section('content')
<section class="booking-section py-5 bg-white">
    <div class="container">
        <!-- Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5 text-dark">Book Your BMW Service</h2>
            <p class="text-muted fs-5">Let our experts take care of your car — schedule your premium service today.</p>
        </div>

        <!-- Booking Form -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card shadow-lg rounded-4 border-0">
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('booking.submit') }}" method="POST">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="John Doe" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="example@bmw.com" required>
                            </div>

                            <!-- Phone -->
                            <div class="mb-4">
                                <label for="phone" class="form-label fw-semibold">Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="+62 812 3456 7890" required>
                            </div>

                            <!-- Car Model -->
                            <div class="mb-4">
                                <label for="model" class="form-label fw-semibold">BMW Model</label>
                                <input type="text" name="model" id="model" class="form-control form-control-lg" placeholder="BMW X5 M Sport 2023" required>
                            </div>

                            <!-- Service Type -->
                            <div class="mb-4">
                                <label for="service_type" class="form-label fw-semibold">Service Type</label>
                                <select name="service_type" id="service_type" class="form-select form-select-lg" required>
                                    <option selected disabled>Select service type</option>
                                    <option value="Exterior Detailing">Exterior Detailing</option>
                                    <option value="Interior Cleaning">Interior Cleaning</option>
                                    <option value="Paint Protection">Paint Protection</option>
                                    <option value="Engine Bay Cleaning">Engine Bay Cleaning</option>
                                    <option value="Wheel & Tire Care">Wheel & Tire Care</option>
                                    <option value="Custom Detailing">Custom Detailing</option>
                                </select>
                            </div>

                            <!-- Date & Time -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="date" class="form-label fw-semibold">Preferred Date</label>
                                    <input type="date" name="date" id="date" class="form-control form-control-lg" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="time" class="form-label fw-semibold">Preferred Time</label>
                                    <input type="time" name="time" id="time" class="form-control form-control-lg" required>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="mb-4">
                                <label for="message" class="form-label fw-semibold">Additional Notes (Optional)</label>
                                <textarea name="message" id="message" rows="4" class="form-control form-control-lg" placeholder="Tell us anything specific about your car or requests..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                    Confirm Booking
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Note -->
                <div class="text-center mt-4">
                    <p class="text-muted small">Our representative will contact you to confirm your appointment.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
