<?php

namespace App\Livewire;

use Livewire\Component;

class ContactCsv extends Component
{
    public $contacts = [
        ['name' => '', 'phone' => '', 'email' => '']
    ];

    public $showConfirmModal = false;
    public $showCsvModal = false;
    public $csvString = '';

    public $messages = [
        'contacts.*.name.required' => 'The Nama Kontak on row :position is required.',
        'contacts.*.name.regex' => 'The Nama Kontak on row :position must only contain letters.',
        'contacts.*.phone.required' => 'The Nomor Telepon number on row :position is required.',
        'contacts.*.phone.numeric' => 'The Nomor Telepon number on row :position must be a valid number.',
        'contacts.*.phone.regex' => 'The Nomor Telepon number on row :position must be a valid number.',
        'contacts.*.email.required' => 'The Email on row :position is required.',
        'contacts.*.email.email' => 'The Email on row :position must be a valid email address.',
        'contacts.*.email.regex' => 'The Email on row :position must be a valid email address.',
    ];


    // Default rules
    protected $defaultRules = [
        'contacts.*.name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
        'contacts.*.phone' => ['required', 'numeric', 'regex:/^(\+?\d{15,})$/'],
        'contacts.*.email' => ['required', 'email', 'regex:/^[^@]+@[^@]+\.[^@]+$/'],
    ];

    // Dynamic rules based on contacts
    protected function rules()
    {
        $rules = [];

        foreach ($this->contacts as $index => $contact) {
            // Only add validation rules for filled fields
            if ($contact['name'] || $contact['phone'] || $contact['email']) {
                $rules["contacts.$index.name"] = $this->defaultRules['contacts.*.name'];
                $rules["contacts.$index.phone"] = $this->defaultRules['contacts.*.phone'];
                $rules["contacts.$index.email"] = $this->defaultRules['contacts.*.email'];
            }
        }

        // Ensure we return at least a valid empty rule to avoid validation issues
        return $rules ?: ['contacts.dummy' => 'sometimes'];
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addRow()
    {
        // Hanya validasi row yang diisi
        foreach ($this->contacts as $contact) {
            if ($contact['name'] || $contact['phone'] || $contact['email']) {
                $this->validate();
                break;
            }
        }

        array_unshift($this->contacts, ['name' => '', 'phone' => '', 'email' => '']);
    }

    public function removeRow($index)
    {
        unset($this->contacts[$index]);
        $this->contacts = array_values($this->contacts);

        $this->validate(); // Tambahkan validasi setelah impor
    }

    public function importCsv()
    {
        $rows = explode("\n", $this->csvString);

        foreach ($rows as $row) {
            $columns = str_getcsv($row);

            if (count($columns) === 3) {
                $this->contacts[] = [
                    'name' => $columns[0],
                    'phone' => $columns[1],
                    'email' => $columns[2]
                ];
            }
        }

        $this->csvString = '';
        $this->showCsvModal = false;
        $this->validate(); // Tambahkan validasi setelah impor

    }

    public function closeAndResetCsvModal()
    {
        $this->csvString = '';
        $this->showCsvModal = false;
        $this->validate(); // Tambahkan validasi setelah impor
    }

    public function render()
    {
        $validationErrors = $this->getErrorBag()->toArray();

        $formattedErrors = [];
        foreach ($validationErrors as $key => $messages) {
            $index = $this->getContactIndex($key);
            $field = $this->getFieldName($key);

            foreach ($messages as $message) {
                // Gantikan :position dengan nomor row yang benar
                $message = str_replace(':position', $index, $message);
                $formattedErrors[] = $message;
            }
        }

        return view('livewire.contact-csv', [
            'formattedErrors' => $formattedErrors
        ]);
    }

    private function getContactIndex($key)
    {
        preg_match('/\d+/', $key, $matches);
        return isset($matches[0]) ? $matches[0] + 1 : 1;
    }

    private function getFieldName($key)
    {
        if (strpos($key, 'name') !== false) {
            return 'name';
        } elseif (strpos($key, 'phone') !== false) {
            return 'phone';
        } elseif (strpos($key, 'email') !== false) {
            return 'email';
        }
        return 'field';
    }

    public function openConfirmModal()
    {
        $this->validate();

        if ($this->getErrorBag()->isEmpty()) {
            $this->showConfirmModal = true;
        }
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function submitContacts()
    {
        // Lakukan logika pengiriman data di sini
        return redirect()->route('contact');
    }
}