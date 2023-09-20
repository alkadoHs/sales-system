<?= $this->extend('layouts/main') ;?>

<?= $this->section('content') ;?>

<main class="pt-20 -mt-2">
          <div class="mx-auto p-2">
            <!-- row -->
            <div class="flex flex-wrap flex-row">
              <div class="flex-shrink max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">Branches Settings</p>
              </div>
              <div class="flex-shrink max-w-full px-2 w-full mb-6">
                <div
                  class="p-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full"
                >
                  <div class="flex flex-wrap flex-row -mx-6">
                    <div class="flex-shrink max-w-full px-4 w-full">
                      <div class="md:flex md:justify-between">
                        <div x-data="{ open: false }">
                            <!-- Button trigger modal -->
                            <button @click="open = true" type="button" class="py-2 my-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add New</Button>

                            <!--ADD NEW BRANCH Modal -->
                            <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-sm min-w-sm mx-5" style="" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                <form action="/settings/branch/create" method="post" accept-charset="utf-8" class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                    <button type="button" @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                    <!-- modal title -->
                                    <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Add New Branch</div>
                                    <!-- modal content -->
                                    <div class="mb-6 p-4">
                                        <label for="branch_name" class="inline-block mb-2">Branch Name</label>
                                        <input type="text" name="branch_name" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="branch_name" placeholder="eg UYOLE BRANCH">
                                    </div>
                                    <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                    <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves Changes</Button>
                                    </div>
                                </form>
                                </div>
                                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                            </div>
                        </div>
                      </div>

                      <div class="w-full mb-6 overflow-x-auto" style="white-space: nowrap;">
                          <table
                            class="table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dark:text-gray-400"
                          >
                            <thead>
                              <tr
                                class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40"
                              >
                                <th>S/NO</th>
                                <th>Branch Name</th>
                                <th>Manajor</th>
                                <th data-sortable="false">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center">
                                    01
                                </td>
                                <td class="">
                                  UYOLE SHOP
                                </td>
                                <td class="">
                                  LULU MENEJI
                                </td>
                                <td class="text-center flex" style="gap: 4px; justify-content: center">
                                     <div x-data="{ open: false }">
                                        <!-- Button trigger modal -->
                                        <button @click="open = true" type="button" class="py-1 my-2 px-1 inline-block text-center rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                            <a
                                                href="javascript:;"
                                                class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500"
                                                title="Delete"
                                            >
                                                <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-trash"
                                                viewBox="0 0 16 16"
                                                >
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                ></path>
                                                </svg>
                                            </a>
                                        </Button>

                                        <!--DELETE BRANCH Modal -->
                                        <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                            <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-sm min-w-sm mx-5" style="" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                                <button @click="open = false" type="button" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                                <!-- modal title -->
                                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 text-red-500 font-bold">You're about to delete branch!</div>
                                                <!-- modal content -->
                                                <div class="mb-6 p-4">
                                                Are you sure that you want to <br /> delete this branch?
                                                </div>
                                                <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                                    <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">No</Button>
                                                    <a href="/settings/branch/delete/$id" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0">Yes Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                                        </div>
                                    </div>
                                  
                                   <div x-data="{ open: false }">
                                    <!-- Button trigger modal -->
                                    <button @click="open = true" type="button" class="py-1 my-2 px-1 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        <a
                                            href="javascript:;"
                                            class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500"
                                            title="Edit"
                                        >
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-pencil-square"
                                            viewBox="0 0 16 16"
                                            >
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                            ></path>
                                            <path
                                                fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                                            ></path>
                                            </svg>
                                        </a>
                                    </Button>

                                    <!--UPDATE BRANCH Modal -->
                                    <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                        <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-sm min-w-sm mx-5" style="" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                        <form action="/settings/branch/update/$id" method="post" accept-charset="utf-8" class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                            <button type="button" @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                            <!-- modal title -->
                                            <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Update Branch</div>
                                            <!-- modal content -->
                                            <div class="mb-6 p-4">
                                                <label for="branch_name" class="block mb-2">Branch Name</label>
                                                <input type="text" name="branch_name" value="UYOLE SHOP" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="branch_name">
                                            </div>
                                            <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                            <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                            <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves Changes</Button>
                                            </div>
                                        </form>
                                        </div>
                                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                                    </div>
                                </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-- row -->
            <div class="flex flex-wrap flex-row">
              <div class="flex-shrink max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">Store Settings</p>
              </div>
              <div class="flex-shrink max-w-full px-2 w-full mb-6">
                <div
                  class="p-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full"
                >
                  <div class="flex flex-wrap flex-row -mx-6">
                    <div class="flex-shrink max-w-full px-4 w-full">
                      <div class="md:flex md:justify-between">
                        <div x-data="{ open: false }">
                            <!-- Button trigger modal -->
                            <button @click="open = true" type="button" class="py-2 my-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add New</Button>

                            <!--ADD NEW STORE Modal -->
                            <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-sm min-w-sm mx-5" style="" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                <form action="/settings/store/create" method="post" accept-charset="utf-8" class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                    <button type="button" @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                    <!-- modal title -->
                                    <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Add New Store</div>
                                    <!-- modal content -->
                                    <div style="display:gid; gap: 4px; padding: 8px">
                                        <div>
                                            <label for="store_name" class="inline-block mb-2">Store Name</label>
                                            <input type="text" name="store_name" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="store_name" placeholder="">
                                        </div>
                                        <div>
                                        <label for="mnj" class="inline-block mb-2">Manajor</label>
                                            <select id="mnj" class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                <option selected>Select user</option>
                                                <option value="userId">alkadohs</option>
                                                <option value="userId">Maria</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                    <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves Changes</Button>
                                    </div>
                                </form>
                                </div>
                                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                            </div>
                        </div>
                      </div>

                      <div class="w-full mb-6 overflow-x-auto" style="white-space: nowrap;">
                          <table
                            class="table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dark:text-gray-400"
                          >
                            <thead>
                              <tr
                                class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40"
                              >
                                <th>S/NO</th>
                                <th>Store Name</th>
                                <th>Manajor</th>
                                <th>Users</th>
                                <th data-sortable="false">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center">
                                    01
                                </td>
                                <td class="">
                                  UYOLE SHOP
                                </td>
                                <td class="">
                                  LULU MENEJI
                                </td>
                                <td class="">
                                  4
                                </td>
                                <td class="text-center flex" style="gap: 4px; justify-content: center">
                                     <div x-data="{ open: false }">
                                        <!-- Button trigger modal -->
                                        <button @click="open = true" type="button" class="py-1 my-2 px-1 inline-block text-center rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                            <a
                                                href="javascript:;"
                                                class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500"
                                                title="Delete"
                                            >
                                                <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-trash"
                                                viewBox="0 0 16 16"
                                                >
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                ></path>
                                                </svg>
                                            </a>
                                        </Button>

                                        <!--DELETE BRANCH Modal -->
                                        <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                            <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-sm min-w-sm mx-5" style="" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                                <button @click="open = false" type="button" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                                <!-- modal title -->
                                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 text-red-500 font-bold">You're about to delete store!</div>
                                                <!-- modal content -->
                                                <div class="mb-6 p-4">
                                                Are you sure that you want to <br /> delete this store?
                                                </div>
                                                <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                                    <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">No</Button>
                                                    <a href="/settings/store/delete/$id" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0">Yes Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                                        </div>
                                    </div>
                                  
                                   <div x-data="{ open: false }">
                                    <!-- Button trigger modal -->
                                    <button @click="open = true" type="button" class="py-1 my-2 px-1 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                        <a
                                            href="javascript:;"
                                            class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500"
                                            title="Edit"
                                        >
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-pencil-square"
                                            viewBox="0 0 16 16"
                                            >
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                            ></path>
                                            <path
                                                fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                                            ></path>
                                            </svg>
                                        </a>
                                    </Button>

                                    <!--UPDATE BRANCH Modal -->
                                    <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                                        <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 max-w-sm min-w-sm mx-5" style="" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                        <form action="/settings/store/update/$id" method="post" accept-charset="utf-8" class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                            <button type="button" @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                            <!-- modal title -->
                                            <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Update Branch</div>
                                            <!-- modal content -->
                                            <div style="display:grid; gap: 4px; padding: 8px">
                                                <div>
                                                    <label for="store_name" class="block mb-2">Store Name</label>
                                                    <input type="text" name="store_name" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="store_name" placeholder="">
                                                </div>
                                                <div>
                                                <label for="mnj" class="block mb-2">Manajor</label>
                                                    <select id="mnj" class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                        <option selected>Select user</option>
                                                        <option value="userId">alkadohs</option>
                                                        <option value="userId">Maria</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                            <button @click="open = false" type="button" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                            <button type="submit" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves Changes</Button>
                                            </div>
                                        </form>
                                        </div>
                                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
                                    </div>
                                </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </main>

<?= $this->endSection() ;?>