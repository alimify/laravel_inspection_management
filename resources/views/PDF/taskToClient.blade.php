@if($inspection)
    <div class="report-content">
        @includeIf('PDF.form.'.$task->category_id)
        @includeWhen(!View::exists('PDF.form.'.$task->category_id),'PDF.form.default')
    </div>
@endif
