<?php
namespace Topxia\Service\Taxonomy\Dao;

interface TagGroupTagDao
{
    public function get($id);

    public function create($fields);

    public function findTagRelationsByGroupId($groupId);

    public function update($groupId, $fields);

    public function deleteByGroupId($groupId);
}
