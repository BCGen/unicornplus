@form_group(['id' => $id, 'label'=> $label ])
        <textarea
            id={{ $id }}
            class="form-control"
            rows={{ $rows ?? 10 }}
            name={{ $id }}
        >{{ isset($item) ? $item->$id : '' }}</textarea>
@endform_group
