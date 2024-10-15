@extends('master')
@section('title', 'Contactez-moi')
@section('content')
<section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Soyez plus proche</h1>
                            <p class="lead fw-normal text-muted mb-0">Travaille avec moi</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->

                                

                                <form id="contactForm" method="post">
                                @csrf
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." required />
                                    <label for="name">Nom et prénom</label>
                                    <div class="invalid-feedback" id="nameError">A name is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" required />
                                    <label for="email">E-mail</label>
                                    <div class="invalid-feedback" id="emailError">A valid email is required.</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" required />
                                    <label for="phone">Numéro de téléphone</label>
                                    <div class="invalid-feedback" id="phoneError">A valid phone number is required.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" id="messageError">A message is required.</div>
                                </div>

                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit" disabled>Envoyer</button></div>
                            </form>

                            <!-- Modal Structure -->
                            <div id="infoModal" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <span class="close-btn">&times;</span>
                                    <h1>Vos informations</h1>
                                    <p><strong>Nom et prénom: </strong><span id="modalName">{{ $data->name ?? '' }}</span></p>
                                    <p><strong>E-mail: </strong><span id="modalEmail">{{ $data->email ?? '' }}</span></p>
                                    <p><strong>Téléphone: </strong><span id="modalPhone">{{ $data->phone ?? '' }}</span></p>
                                    <p><strong>Message: </strong><span id="modalMessage">{{ $data->message ?? '' }}</span></p>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {

                                    const nameInput = document.getElementById('name');
                                    const emailInput = document.getElementById('email');
                                    const phoneInput = document.getElementById('phone');
                                    const messageInput = document.getElementById('message');
                                    const submitButton = document.getElementById('submitButton');

                                    // Function to check the inputs and enable/disable the submit button
                                    function checkInputs() {
                                        const nameValue = nameInput.value.trim();
                                        const emailValue = emailInput.value.trim();
                                        const phoneValue = phoneInput.value.trim();
                                        const messageValue = messageInput.value.trim();

                                        if (nameValue !== '' && emailValue !== '' && phoneValue !== '' && messageValue !== '') {
                                            submitButton.disabled = false; // Enable submit button
                                        } else {
                                            submitButton.disabled = true; // Disable submit button
                                        }
                                    }

                                    // Attach input event listeners to check the inputs whenever they change
                                    nameInput.addEventListener('input', checkInputs);
                                    emailInput.addEventListener('input', checkInputs);
                                    phoneInput.addEventListener('input', checkInputs);
                                    messageInput.addEventListener('input', checkInputs);

                                    // Initially check inputs when the page loads
                                    checkInputs();

                                    @if (isset($data))
                                        // Show the modal if data exists (after submission)
                                        const modal = document.getElementById('infoModal');
                                        modal.style.display = 'block';

                                        // Close button functionality
                                        document.querySelector('.close-btn').addEventListener('click', function () {
                                            modal.style.display = 'none';
                                        });

                                        // Close modal if clicking outside of it
                                        window.onclick = function (event) {
                                            if (event.target == modal) {
                                                modal.style.display = 'none';
                                            }
                                        };
                                    @endif
                                });
                            </script>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
        <!-- Footer-->
        
