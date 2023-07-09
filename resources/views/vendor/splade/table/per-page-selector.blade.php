<select name="per_page"
    class="block bg-base-100 text-base-content focus:ring-secondary focus:border-secondary min-w-max shadow-sm text-sm border-base-300 rounded-md"
    @change="table.updateQuery('perPage', $event.target.value)">
    @foreach($table->allPerPageOptions() as $perPage)
    <option value="{{ $perPage }}" @selected($perPage===$table->perPage())>
        {{ $perPage }} {{ __('per page') }}
    </option>
    @endforeach
</select>