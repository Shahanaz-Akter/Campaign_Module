@extends('layouts.master')
@section('title')
<title>Zoho Forms A/B Testing Campaign Next2</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="container mt-5">
            <h1>Message List</h1>
            <ul class="list-group" id="message-list">
                <li class="list-group-item">Hello!</li>
                <li class="list-group-item">How are you?</li>
                <li class="list-group-item">Goodbye.</li>
            </ul>
            <div class="mt-3">
                <button type="button" class="btn btn-danger" id="delete-all-btn">Delete All Messages</button>
            </div>
        </div>

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    // Get the message list and delete all button elements
    const messageList = document.getElementById('message-list');
    const deleteAllBtn = document.getElementById('delete-all-btn');

    // Add event listener to delete all button
    deleteAllBtn.addEventListener('click', () => {
        // Remove all messages from the message list
        messageList.innerHTML = '';
    });

    // Add event listeners to each message to allow for deletion
    const messages = messageList.querySelectorAll('li');
    messages.forEach((message) => {
        // Create a delete button element for each message
        const deleteBtn = document.createElement('button');
        deleteBtn.classList.add('btn', 'btn-danger', 'btn-sm', 'float-end');
        deleteBtn.textContent = 'Delete';

        // Add event listener to delete button
        deleteBtn.addEventListener('click', () => {
            // Remove the message from the message list
            message.remove();
        });

        // Add the delete button to the message element
        message.appendChild(deleteBtn);
    });
</script>

@endsection