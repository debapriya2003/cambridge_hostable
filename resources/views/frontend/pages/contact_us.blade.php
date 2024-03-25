@extends('frontend.layouts.app')

@section('content')
    @include('frontend.includes.action_messages')
    <section style="background-color: azure;" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contactForm">
                        <h2>Contact Us</h2>
                        <form id="admissionForm" action="{{ route('frontend.contact.store') }}" method="post"
                            style="max-width: 500px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="classSelect" style="display: block; margin-bottom: 8px;">Select Class:</label>
                                <select id="classSelect" name="class"
                                    style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                                    <option value="class1">Class 1</option>
                                    <option value="class2">Class 2</option>
                                    <option value="class3">Class 3</option> -->
                                    <!-- Add more options as needed -->
                                </select>
                                @error('class')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="courseSelect" style="display: block; margin-bottom: 8px;">Select Course:</label>
                                <select id="courseSelect" name="course"
                                    style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                                    <option value="course1">Course 1</option>
                                    <option value="course2">Course 2</option>
                                    <option value="course3">Course 3</option> -->
                                    <!-- Add more options as needed -->
                                </select>
                                @error('course')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="name" style="display: block; margin-bottom: 8px;">Name:</label>
                                <input type="text" id="name" name="name"
                                    style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                                @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="display: block; margin-bottom: 8px;">Email:</label>
                                <input type="email" id="email" name="email"
                                    style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                                @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone" style="display: block; margin-bottom: 8px;">Phone Number:</label>
                                <input type="text" id="phone" name="phone"
                                    style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                                @error('phone')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message" style="display: block; margin-bottom: 8px;">Message:</label>
                                <textarea id="message" name="message" rows="4" cols="50"
                                    style="width: 100%; padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"></textarea>
                                @error('message')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
