<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\CreativeWriting;
use Illuminate\Support\Facades\Mail;
use App\Mail\EssaySubmissionRecieved;
use App\Traits\CreativeWritingHelper;

class CreativeWritingForm extends Component
{
    use CreativeWritingHelper;

    public CreativeWriting $editing;

    public function mount()
    {
        $this->editing = $this->makeBlank();
    }

    public function submitEntry()
    {

        $validatedData = $this->validate()['editing'];
        $validatedData['essay'] = textNl2br($validatedData['essay']);

        $creativeWriting = CreativeWriting::create($validatedData);
        if ($creativeWriting) {

            Mail::to($creativeWriting->email)
                ->queue(new EssaySubmissionRecieved($creativeWriting->lastname));

            $this->notify([
                'position' => 'top',
                'titleText' => 'Essay successfully submitted',
                'text' => 'Kindly Check the Email you provided for more information.',
                'icon' => 'success',
                'timer' => '5000',
            ]);
        } else {
            $this->notify([
                'position' => 'top',
                'titleText' => 'Essay successfully submitted',
                'text' => 'Kindly Check the Email you provided for more information.',
                'icon' => 'error',
                'timer' => '5000',
            ]);
        }

        $this->editing = $this->makeBlank();
    }

    public function render()
    {
        return view('livewire.front.creative-writing-form');
    }

    public function makeBlank()
    {
        return CreativeWriting::make();
    }
}
