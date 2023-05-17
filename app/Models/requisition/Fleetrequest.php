<?php
        namespace App\Models\Requisition;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Fleetrequest extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_fleetrequest';
            protected $primaryKey = 'fleetRequest_id';
            public $timestamps = true;
            protected $fillable =[
                'fleet_id',
'fleetName',
'modelNumber',
'numberPlate_id',
'numberPlateType',
'plateNumber',
'rootPermit',
'issueDate',
'expireDate',
'createdOn',
'createdBy',
'alias',
'status',
'remarks',

            ];

            protected $appends = ['status_name'];

            protected function getStatusNameAttribute()
            {
                return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
            }

    protected function createdBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  User::find($value) ? User::find($value)->name : '',
        );
    }

    protected function updatedBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => User::find($value) ? User::find($value)->name : '',
        );
    }
        }