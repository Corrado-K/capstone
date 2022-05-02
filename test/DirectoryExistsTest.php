<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

define('_DIR_', 'C:\xampp\htdocs\capstone\\' );

final class DirectoryExistsTest extends TestCase
{

    public function testdoesAnnouncementDirectoryExist(): void
    {
        $this->assertDirectoryExists(_DIR_.'files\announcement_uploads');
    }

    public function testdoesSharedFilesDirectoryExist(): void
    {
        $this->assertDirectoryExists(_DIR_.'files\shared_files_uploads');
    }
}