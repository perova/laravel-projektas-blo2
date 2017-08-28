<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialsController extends Controller {
  public function getAll()
  {
    $title = 'Testimonials';

    // Testimonial::create([
    //   'name'=>'lalalal',
    //   'time'=>date('Y-m-d H:i:s'),
    //   'content'=>'be be be'
    // ]);

    $testimonials = Testimonial::get();

    //dd($testimonials);
    //
    // $testimonials = [
    //   [
    //     'name' => 'James',
    //     'time' => '120202020',
    //     'text' => 'lorem ipsums kakkkkakdieijfjf'
    //   ],
    //   [
    //     'name' => 'Peter',
    //     'time' => '33333333333',
    //     'text' => 'peter have kakakakakka'
    //   ],
    //   [
    //     'name' => 'Vivian',
    //     'time' => '23233',
    //     'text' => 'vivian fkkfkkkk']
    //   ];
    // $testimonials[] = [
    //     'name' => 'James james',
    //     'time' => 'laikas',
    //     'text' => 'tekstas'
    //   ];
    //
    // $testimonials[1] = [
    //     'name' => 'James james',
    //     'time' => 'laikas',
    //     'text' => 'tekstas'
    //   ];

      return view('testimonials',['title' => $title,'test' => $testimonials]);
  }

    public function getSingle($id){

      $testimonial = Testimonial::find($id);

        return view('single-testimonial',['test' => $testimonial]);
    }
}
