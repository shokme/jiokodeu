<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(\App\Team::class)->create();
        $user = factory(\App\User::class)->create([
            'name' => 'John Doe',
            'email' => 'me@dev.com',
            'current_team_id' => $team->id,
            'mollie_customer_id' => 'cst_RkgacUQzMz',
            'mollie_mandate_id' => 'mdt_GNpwGkN57u'
        ]);
        $user->teams()->attach($team->id);
        $team->update(['owner_id' => $user->id]);

        $members = factory(\App\User::class, 7)->create(['current_team_id' => $team->id]);
        $team->users()->sync([$user->id, ...$members->pluck('id')]);
    }
}
