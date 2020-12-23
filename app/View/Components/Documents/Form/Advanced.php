<?php

namespace App\View\Components\Documents\Form;

use Illuminate\View\Component;
use App\Models\Setting\Category;

class Advanced extends Component
{
    /** @var string */
    public $type;

    /** @var bool */
    public $hideRecurring;

    /** @var bool */
    public $hideCategory;

    /** @var bool */
    public $hideAttachment;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type, bool $hideRecurring = false, bool $hideCategory = false, bool $hideAttachment = false)
    {
        $this->type = $type;

        $this->hideRecurring = $hideRecurring;
        $this->hideCategory = $hideCategory;
        $this->hideAttachment = $hideAttachment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $category_type = $this->getCategoryType();

        if ($category_type) {
            $categories = Category::$category_type()->enabled()->orderBy('name')->take(setting('default.select_limit'))->pluck('name', 'id');
        } else {
            $categories = Category::enabled()->orderBy('name')->take(setting('default.select_limit'))->pluck('name', 'id');
        }

        return view('components.documents.form.advanced', compact('categories', 'category_type'));
    }

    protected function getCategoryType()
    {
        $type = '';

        switch ($this->type) {
            case 'sale':
            case 'income':
            case 'invoice':
                $type = 'income';
                break;
            case 'bill':
            case 'expense':
            case 'purchase':
                $type = 'expense';
                break;
            case 'item':
                $type = 'item';
                break;
            case 'other':
                $type = 'other';
                break;
            case 'transfer':
                $type = 'transfer';
                break;
        }

        return $type;
    }
}
