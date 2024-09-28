<?php

use App\Livewire\Admin\Category\Categoriescomponent;
use App\Livewire\Admin\Category\CreateCategoryComponent;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{

    public function test_category_component_route()
    {
        Livewire::test('admin.category.categories-component')
            ->assertSee('Categories ');
    }

    public function test_create_category_component_route()
    {
        Livewire::test('admin.category.create-category-component')
            ->assertSee('Create Category');
    }
    /** @test */
    public function test_create_category_with_missing_name()
    {

        $initialCount = Category::count();

        Livewire::test(CreateCategoryComponent::class)

        ->set('slug', 'test-slug')

        ->set('status', 'active')

        ->set('logo', null)

        ->call('save')

        ->assertHasErrors(['name' => 'required']);


    $this->assertCount($initialCount, Category::all());

    }

    /** @test */
    public function test_create_category_with_missing_slug()
    {

        $initialCount = Category::count();

        Livewire::test(CreateCategoryComponent::class)

            ->set('name', 'Test Category')

            ->set('slug', '')

            ->set('status', 'active')

            ->set('logo', null)

            ->call('save')

            ->assertHasErrors(['slug' => 'required']);

        $this->assertCount($initialCount, Category::all());

    }

    /** @test */
    public function test_create_category_with_missing_status()
    {

        $initialCount = Category::count();

        Livewire::test(CreateCategoryComponent::class)

            ->set('name', 'Test Category')

            ->set('slug', 'test-slug')

            ->set('status', '')

            ->set('logo', null)

            ->call('save')

            ->assertHasErrors(['status' => 'required']);

        $this->assertCount($initialCount, Category::all());

    }



    /** @test */
    public function test_create_category_with_all_fields_present()
    {

        $initialCount = Category::count();


        Livewire::test(CreateCategoryComponent::class)

            ->set('name', 'Test Category')

            ->set('slug', 'test-slug')

            ->set('status', 'active')

            ->call('save')

            ->assertStatus(200);


        $this->assertCount(1, Category::all());

        $this->assertEquals('Test Category', Category::latest()->first()->name);

        $this->assertEquals('test-slug', Category::latest()->first()->slug);

        $this->assertEquals('active', Category::latest()->first()->status);

    }
}
