<?php

namespace Laravel\Nova\Tests\Fixtures;

use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\ActionModelCollection;
use Laravel\Nova\Fields\ActionFields;

class OpensInNewTabAction extends Action
{
    public function handle(ActionFields $fields, ActionModelCollection $models)
    {
        return Action::openInNewTab('http://google.com');
    }
}
