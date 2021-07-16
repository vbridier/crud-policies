@php
$readonly = is_callable($prop['readonly']) ? $prop['readonly']() : $prop['readonly'];
@endphp
@switch($prop['type'])
    @case(CrudType::password())
    @include('crud-policies::crud.formfields.password')
    @break
    @case(CrudType::boolean())
    @include('crud-policies::crud.formfields.boolean')
    @break
    @case(CrudType::int())
    @include('crud-policies::crud.formfields.int')
    @break
    @case(CrudType::float())
    @include('crud-policies::crud.formfields.float')
    @break
    @case(CrudType::email())
    @include('crud-policies::crud.formfields.email')
    @break
    @case(CrudType::text())
    @include('crud-policies::crud.formfields.text')
    @break
    @case(CrudType::json())
    @include('crud-policies::crud.formfields.json')
    @break
    @case(CrudType::image())
    @include('crud-policies::crud.formfields.image')
    @break
    @case(CrudType::enum())
    @include('crud-policies::crud.formfields.enum')
    @break
    @case(CrudType::order())
    @include('crud-policies::crud.formfields.order')
    @break
    @case(CrudType::belongsTo())
    @include('crud-policies::crud.formfields.belongsTo')
    @break
    @case(CrudType::belongsToMany())
    @include('crud-policies::crud.formfields.belongsToMany')
    @break
    @case(CrudType::string())
    @default
    @include('crud-policies::crud.formfields.string')
@endswitch
