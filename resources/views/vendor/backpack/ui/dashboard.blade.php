@extends(backpack_view('blank'))

@php
    // $widgets['before_content'][] = [
    //     'type'        => 'jumbotron',
    //     'heading'     => 'Welcome!',
    //     'content'     => 'Use the sidebar to the left to create, edit or delete content.',
    //     'button_link' => backpack_url('logout'),
    //     'button_text' => 'Logout',
    // ];
    
      $widgets['before_content'][] = [
          'type'         => 'alert',
          'class'        => 'alert alert-success mb-2',
          'heading'      => 'Login Succesfully!',
          'content'      => 'Please make the best use of the HMIF SHORTLINK service. Thank you!.',
          'close_button' => true, // show close button or not
      ];

      $widgets['before_content'][] = [
      'type'       => 'card',
      'wrapper' => ['class' => 'col-sm-6 col-md-12'], // optional
      // 'class'   => 'card bg-dark text-white', // optional
      'content'    => [
        'header' => 'Welcome! ' . \Auth::guard('backpack')->user()->name,
          'body'   => 'Have a nice day! ✨. Thank you for using the HMIF SHORTLINK service. Keep supporting us to become a better organization. Feedback and suggestions can be submitted through our social media @hmifunej.',
          ]
        ];


@endphp

@section('content')
  {{-- <p>Your custom HTML can live here</p> --}}
@endsection