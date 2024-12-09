<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="registerModalLabel">Registration Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @auth
                    <form action="{{ route('participant.store', $event->id) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="why_interested" class="form-label fw-bold">Why Are You Interested?</label>
                            <textarea class="form-control" id="why_interested" name="why_interested" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="why_qualified" class="form-label fw-bold">Why Are You Qualified?</label>
                            <textarea class="form-control" id="why_qualified" name="why_qualified" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label fw-bold">Occupation</label>
                            <input type="text" class="form-control" id="job" name="job" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="commitment" name="commitment" required>
                            <label class="form-check-label" for="commit">
                                I am committed to this event and will actively participate.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Registration</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</div>
