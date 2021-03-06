<?php
namespace OCA\RobinWoodDashboard\Controller;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;
use OCA\GroupFolders\Folder\FolderManager;

class PageController extends Controller {
	private $userId;
	private $manager;
	public function __construct($AppName, IRequest $request, FolderManager $manager,$UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
		$this->manager = $manager;
	}

	/**
	 * CAUTION: the @Stuff turns off security checks; for this page no admin is
	 *          required and no CSRF check. If you don't know what CSRF is, read
	 *          it up in the docs or you might create a security hole. This is
	 *          basically the only required method to add this exemption, don't
	 *          add it to any other method if you don't exactly know what it does
	 *
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {
        $folders = $this->manager->getFoldersForUser($this->userId);
		return new TemplateResponse('robinwooddashboard', 'index');  // templates/index.php
	}

}
