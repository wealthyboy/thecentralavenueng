<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Payment Receipt</title>

   ```
   <style>
      body {
         margin: 0;
         padding: 0;
         background-color: #f2f2f2;
         font-family: 'Open Sans', Arial, sans-serif;
         color: #333;
      }

      .receipt-wrapper {
         max-width: 720px;
         margin: 40px auto;
         background: #ffffff;
         border-radius: 8px;
         overflow: hidden;
      }

      .receipt-header {
         text-align: center;
         padding: 25px 30px;
         border-bottom: 1px solid #e5e5e5;
      }

      .receipt-header img {
         max-width: 100px;
         height: auto;
      }

      .receipt-body {
         padding: 30px;
      }

      .intro {
         font-size: 14px;
         line-height: 22px;
         margin-bottom: 25px;
      }

      .intro strong {
         color: #27af9a;
      }

      .meta {
         margin-bottom: 25px;
         font-size: 13px;
      }

      .meta span {
         display: block;
         margin-bottom: 4px;
      }

      .reservation-card {
         display: flex;
         border: 1px solid #e1e1e1;
         border-radius: 6px;
         margin-bottom: 20px;
         overflow: hidden;
      }

      .reservation-image {
         width: 150px;
         background: #f5f5f5;
      }

      .reservation-image img {
         width: 100%;
         display: block;
      }

      .reservation-details {
         padding: 15px;
         flex: 1;
         font-size: 13px;
         line-height: 20px;
      }

      .reservation-details .title {
         font-weight: 600;
         text-transform: uppercase;
         color: #27af9a;
         margin-bottom: 6px;
         letter-spacing: 0.05em;
      }

      .price {
         margin-top: 8px;
         font-weight: bold;
      }

      .total-box {
         margin-top: 30px;
         border-top: 1px solid #ddd;
         padding-top: 15px;
         text-align: right;
      }

      .total-box strong {
         font-size: 16px;
      }

      .receipt-footer {
         background: #f7f7f7;
         text-align: center;
         font-size: 12px;
         padding: 15px;
         border-top: 1px solid #ddd;
      }

      .checkin-link {
         display: inline-block;
         margin-top: 10px;
         color: #27af9a;
         text-decoration: none;
         font-weight: 600;
         text-transform: uppercase;
         font-size: 13px;
         letter-spacing: 0.05em;
      }
   </style>
   ```

</head>

<body>

   <div class="receipt-wrapper">

      ```
      <!-- LOGO -->
      <div class="receipt-header">
         <img src="https://thecentralavenue.ng/images/logo/Central_Avenue_Main_Logo_1_-_Copy-removebg-preview.png" alt="The Central Avenue">
      </div>

      <div class="receipt-body">

         <!-- INTRO -->
         <div class="intro">
            Dear {{ optional($user_reservation->guest_user)->name }} {{ optional($user_reservation->guest_user)->last_name }},<br><br>

            Thank you for choosing <strong>The Central Avenue</strong> for your stay.
            We are pleased to confirm that your payment has been received and your reservation is
            <strong style="color:green;">CONFIRMED</strong>.<br><br>

            <b>Note:</b> A valid ID is required upon arrival for check-in.
            @if ($user_reservation->showCheckLink)
            You may also complete a self check-in by uploading your ID using the link below.<br>
            <a class="checkin-link" href="https://thecentralavenue.ng/check-in?id={{ $user_reservation->id }}">
               Click here to check-in
            </a>
            @endif
         </div>

         <!-- META -->
         <div class="meta">
            <span><b>Receipt Date:</b> {{ now()->format('D, M d, Y') }}</span>
            <span><b>Total Paid:</b> {{ $user_reservation->currency ?? '₦' }}{{ number_format($user_reservation->total_amount) }}</span>
         </div>

         <!-- RESERVATION DETAILS -->
         @foreach ($user_reservation->reservations as $reservation)
         <div class="reservation-card">

            <div class="reservation-image">
               <img src="{{ isset(optional($reservation->apartment)->images[0]) 
                    ? optional($reservation->apartment)->images[0]->image 
                    : '' }}">
            </div>

            <div class="reservation-details">
               <div class="title">
                  {{ optional($reservation->apartment)->name ?? optional($reservation->property)->name }}
               </div>

               <div><b>Check-in:</b> {{ optional($reservation->checkin)->isoFormat('dddd, MMMM Do YYYY') }}</div>
               <div><b>Check-out:</b> {{ optional($reservation->checkout)->isoFormat('dddd, MMMM Do YYYY') }}</div>
               <div><b>Length of stay:</b> {{ $reservation->length_of_stay }} night(s)</div>

               <div class="price">
                  {{ $user_reservation->currency ?? '₦' }}{{ number_format($reservation->price) }} per night
               </div>
            </div>

         </div>
         @endforeach

         <!-- TOTAL -->
         <div class="total-box">
            <strong>
               Total Paid: {{ $user_reservation->currency ?? '₦' }}{{ number_format($user_reservation->total_amount) }}
            </strong>
         </div>

      </div>

      <!-- FOOTER -->
      <div class="receipt-footer">
         © {{ date('Y') }} The Central Avenue. All rights reserved.
      </div>
      ```

   </div>

</body>

</html>