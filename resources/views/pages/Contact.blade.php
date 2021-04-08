@extends('layouts.layout')
@section('content')
<div class="contact-section-contact">
    <div class="contact-section-title">
        <h1>CONTACT US</h1>
    </div>
    <h2>GET IN TOUCH</h2>
    <div class="contact-section-contact-formulaire">
        <form method="POST" action="userMessage">
            @csrf
            <input type="text" name="firstName" placeholder="First Name" id="firstname" required>
            <input type="text" name="lastName" placeholder="Last Name" id="lastname" required><br>
            <input type="tel" name="phone" placeholder="Your Phone" id="phone" required>
            <input type="email" name="email" placeholder="Your Email" id="email" required><br>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Your Message" required></textarea><br>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
</div>
@stop