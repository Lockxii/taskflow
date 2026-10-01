<?php


namespace App\Enum;

enum WorkspaceRole: string
{
    case ADMIN = 'owner';
    case MEMBER = 'member';

    public function label(): string{
        return match ($this) {
            self::ADMIN => 'ADMIN',
            self::MEMBER => 'MEMBER',
        };
    }
}
