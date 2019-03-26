
@if($errors->any())
    <section>
        <table class="table">
            <th class="danger">
                <h2>Error(s)</h2>
            </th>
            @foreach($errors->all() as $e)
                <tr class="danger">
                    <td>{{ $e }}</td>
                </tr>
            @endforeach
        </table>
    </section>
@endif