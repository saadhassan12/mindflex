<!DOCTYPE html>
<html lang="en">

@include('layout.app')

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
   @include('topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('nav')
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Contact Us</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>Jinnah university, Karachi, Pakistan</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>Mindfelx@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>03353637382</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.749661375905!2d67.00424841432002!3d24.860767606128623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb337767cba0c99:0x4f60c15c1f84a8!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2sbd!4v1651422532442!6e4"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <h3>Subscribe to our Newsletter <h3></h3>
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

<!--  -->
<!-- <div id="chatbot-icon">
    <img src="chatbot-icon.jpeg" alt="Chatbot Icon">
</div> -->
<!--  -->
    


<!-- Chatbot button -->
<button class="chatbot-button" id="chatbot-button" onclick="toggleChatbot()">
    <img class="chatbot-icon" src="img/chatbot-.png" alt="Chatbot">
</button>

<!-- Chatbot container -->
<div class="chatbot-container" id="chatbot-container">
    <div class="chatbot-header">
        <span>Chatbot</span>
        <button class="close-button" onclick="closeChatbot()">X</button>
    </div>
    <div class="chatbot-body" id="chatbot-body">
        <div class="message other">
            <div class="message-content">
                Hello! How can I assist you?
            </div>
        </div>
    </div>
    <div class="chatbot-input">
        <input type="text" id="chatbot-input" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<script>
    function toggleChatbot() {
        var chatbotContainer = document.getElementById('chatbot-container');
        var chatbotButton = document.getElementById('chatbot-button');
        if (chatbotContainer.style.display === 'none' || chatbotContainer.style.display === '') {
            chatbotContainer.style.display = 'block';
            chatbotButton.style.display = 'none';
        } else {
            chatbotContainer.style.display = 'none';
            chatbotButton.style.display = 'block';
        }
    }

    function closeChatbot() {
        var chatbotContainer = document.getElementById('chatbot-container');
        var chatbotButton = document.getElementById('chatbot-button');
        chatbotContainer.style.display = 'none';
        chatbotButton.style.display = 'block';
    }

    function sendMessage() {
        var messageInput = document.getElementById('chatbot-input').value.trim();
        if (messageInput !== '') {
            appendMessage('self', messageInput);
            document.getElementById('chatbot-input').value = '';
            // Here you would typically send the message to your backend or process it
            // with your chatbot and receive a response.
            // For demonstration purposes, I'll simulate a response after a delay.
            setTimeout(function() {
                var response = "This is a placeholder response from the bot.";
                appendMessage('other', response);
            }, 1000);
        }
    }

    function appendMessage(sender, message) {
        var chatBody = document.getElementById('chatbot-body');
        var messageClass = sender === 'self' ? 'self' : 'other';
        var messageDiv = document.createElement('div');
        messageDiv.classList.add('message', messageClass);
        var messageContent = document.createElement('div');
        messageContent.classList.add('message-content');
        messageContent.textContent = message;
        messageDiv.appendChild(messageContent);
        chatBody.appendChild(messageDiv);
        chatBody.scrollTop = chatBody.scrollHeight; // Scroll to bottom
    }
</script>

<!-- Footer Start -->
@include('footer')
<!-- Footer End -->


<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="lib/twentytwenty/jquery.event.move.js"></script>
<script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>