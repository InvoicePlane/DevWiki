# Users Model

## Default user roles

 * `system_admin` - Administrator of the application, owns all permissions
 * `manager` - Manager that is able to alter most of the settings, invoice groups,...
 * `user` - Basic application user that is able to create quote, invoices, payments,...
 * `client` - Client that can read his quotes / invoices

## Permissions

### Available persmissions

<div class="table-responsive">
<table class="table table-bordered table-striped">
    <tr>
        <th>Permission Identifier</th>
        <th>Description</th>
    </tr>
    <tr>
        <td><code>all</code></td>
        <td>Used for system_admin role, unrestricted access to all functions</td>
    </tr>
</table>
</div>