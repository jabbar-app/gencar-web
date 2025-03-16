@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center"
        style="animation: fadeInDown 1s ease-in-out;">
        <h4>Pertanyaan {{ $index + 1 }} dari 40</h4>
        <div id="countdown" class="text-danger" style="font-size: 1.5rem;"></div>
      </div>
      <div class="card-body" style="animation: fadeInUp 1s ease-in-out;">
        <form method="POST" action="{{ route('quiz.submit') }}">
          @csrf
          <input type="hidden" name="question_id" value="{{ $question->id }}">
          <input type="hidden" name="index" value="{{ $index }}">
          <input type="hidden" name="time_taken" id="timeTaken" value="">
          <input type="hidden" name="quiz_stage" value="{{ $quiz_stage }}">
          <input type="hidden" name="answer_id" id="answerId" value="">

          <div class="mb-3">
            <p style="animation: fadeInLeft 1s ease-in-out;">{{ $question->question }}</p>
          </div>

          <div class="mb-3">
            @foreach ($question->answers as $answer)
              <button type="button" data-answer-id="{{ $answer->id }}"
                class="btn btn-outline-danger w-100 mb-2 answer-button"
                style="text-align: left !important; animation: fadeInRight 1s ease-in-out;">
                {{ $answer->answer }}
              </button>
            @endforeach
          </div>

          @if ($index + 1 > 40)
            <button id="finishButton" class="btn btn-success" style="display: none; animation: fadeIn 1s ease-in-out;">
              Selesai
            </button>
          @endif
        </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      let startTime = new Date().getTime();

      // Countdown Timer
      let countdownElement = document.getElementById('countdown');
      let timeLeft = 60;
      let countdownInterval = setInterval(function() {
        timeLeft--;
        countdownElement.textContent = timeLeft + ' detik';
        if (timeLeft <= 0) {
          clearInterval(countdownInterval);
          alert('Waktu habis!');
        }
      }, 1000);

      document.querySelectorAll('.answer-button').forEach(function(button) {
        button.addEventListener('click', function(event) {
          event.preventDefault(); // Prevent default form submission

          let endTime = new Date().getTime();
          let timeTaken = (endTime - startTime) / 1000;

          // Set time taken and answer ID
          document.getElementById('timeTaken').value = timeTaken;
          document.getElementById('answerId').value = this.getAttribute('data-answer-id');

          // Submit the form
          this.closest('form').submit();
        });
      });
    });
  </script>
@endsection
