<?php defined('SYSPATH') or die('No direct script access.');

class Model_ActiveCollab_Migration extends Model_ActiveCollab_OrmBase
{
    const TYPE_COMPANY = 'company';
    const TYPE_PROJECT = 'project';
    const TYPE_TASK = 'task';
    const TYPE_COMMENT = 'comment';
    const TYPE_FILE = 'file';
    const TYPE_ATTACHMENT = 'attachment';
    const TYPE_NOTE = 'note';
    const TYPE_DISCUSSION = 'discussion';
    const TYPE_USER = 'user';

    protected $_table_name = Constants::TABLE_ACTIVECOLLAB_MIGRATION;

    protected $_table_columns = array(
        Constants::FIELD_ID => Constants::FIELD_ID,
        Constants::FIELD_ACTIVECOLLAB_ID => Constants::FIELD_ACTIVECOLLAB_ID,
        Constants::FIELD_MANTIS_ID => Constants::FIELD_MANTIS_ID,
        Constants::FIELD_DOTPROJECT_ID => Constants::FIELD_DOTPROJECT_ID,
        Constants::FIELD_TYPE => Constants::FIELD_TYPE
    );

    protected function before_save(Validation $validation = NULL)
    {
        // TODO: Implement before_save() method.
    }

    protected function after_save(Validation $validation = NULL)
    {
        // TODO: Implement after_save() method.
    }


    public function getActiveCollabId()
    {
        return $this->{Constants::FIELD_ACTIVECOLLAB_ID};
    }
    public function setActiveCollabId($value)
    {
        $this->{Constants::FIELD_ACTIVECOLLAB_ID} = $value;
        return $value;
    }

    public function getMantisId()
    {
        return $this->{Constants::FIELD_MIGRATION_MANTIS_ID};
    }
    public function setMantisId($value)
    {
        $this->{Constants::FIELD_MIGRATION_MANTIS_ID} = $value;
        return $value;
    }

    public function getDotProjectId()
    {
        return $this->{Constants::FIELD_MIGRATION_DOTPROJECT_ID};
    }
    public function setDotProjectId($value)
    {
        $this->{Constants::FIELD_MIGRATION_DOTPROJECT_ID} = $value;
        return $value;
    }

    public function getType()
    {
        return $this->{Constants::FIELD_MIGRATION_TYPE};
    }
    public function setType($value)
    {
        $this->{Constants::FIELD_MIGRATION_TYPE} = $value;
        return $value;
    }
}