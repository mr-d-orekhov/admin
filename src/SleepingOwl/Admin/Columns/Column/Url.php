<?php namespace SleepingOwl\Admin\Columns\Column;

use AdminTemplate;
use Illuminate\View\View;

class Url extends NamedColumn
{
    protected $prefix = '';

    public function prefix($prefix = null)
    {
        if (is_null($prefix)) {
            return $this->prefix;
        }

        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return View
     */
    public function render()
    {
        $params = [
            'url'   => $this->prefix() . '/' . $this->getValue($this->instance, $this->name()),
            'value' => $this->getValue($this->instance, $this->name()),
        ];
        return view(AdminTemplate::view('column.url'), $params);
    }

}