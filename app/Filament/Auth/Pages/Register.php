<?php

namespace App\Filament\Auth\Pages;

use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Filament\Auth\Pages\Register as BaseRegisterPage;

class Register extends BaseRegisterPage
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
                $this->getRoleFormComponent(),
            ]);
    }

    protected function getRoleFormComponent(): Component
    {
        return Select::make('role')
            ->label(__('Role'))
            ->options([
                'buyer' => __('Buyer'),
                'seller' => __('Seller'),
            ])
            ->default('buyer')
            ->required();
    }
}
