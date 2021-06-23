  <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('parking_id');
            $table->integer('slot_id');
            $table->time('start_date');
            $table->time('end_date');
            $table->integer('carno')->nullable();
            $table->integer('totalamount')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('paidamount')->nullable();
            $table->time('extendedtime')->nullable();
            $table->integer('status')->nullable();
            $table->string('feature')->nullable();
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
