<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;

class ContentList extends Component
{
    use WithPagination;

    public $search = '';
    public $statusFilter = 'all';
    public $selectedContact = null;
    public $showDetailsModal = false;

    protected $paginationTheme = 'tailwind';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatusFilter()
    {
        $this->resetPage();
    }

    public function viewContact($contactId)
    {
        $this->selectedContact = Contact::findOrFail($contactId);
        
        if ($this->selectedContact->status === 'new') {
            $this->selectedContact->update(['status' => 'read']);
        }
        
        $this->showDetailsModal = true;
    }

    public function closeDetailsModal()
    {
        $this->showDetailsModal = false;
        $this->selectedContact = null;
    }

    public function updateStatus($contactId, $status)
    {
        $contact = Contact::findOrFail($contactId);
        $contact->update(['status' => $status]);
        
        session()->flash('message', 'Contact status updated successfully!');
    }

    public function deleteContact($contactId)
    {
        Contact::findOrFail($contactId)->delete();
        session()->flash('message', 'Contact message deleted successfully!');
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $query = Contact::query();

        // Search filter
        if ($this->search) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('subject', 'like', '%' . $this->search . '%')
                  ->orWhere('message', 'like', '%' . $this->search . '%');
            });
        }

        // Status filter
        if ($this->statusFilter !== 'all') {
            $query->where('status', $this->statusFilter);
        }

        $contacts = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin.content-list', [
            'contacts' => $contacts
        ]);
    }
}
