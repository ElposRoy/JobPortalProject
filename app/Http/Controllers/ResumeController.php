<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

 

    public function index(): Response
    {
        $user_id = Auth::id();
        $hasResume = Resume::where('user_id', $user_id)->exists();
        return Inertia::render('Dashboard/Jobseeker-Page/Resume-Build', [
            'hasResume' => $hasResume,
            // 'products' => Product::with(['category','unit_type','purchases'])->paginate(),
            // 'categories'=> Category::all(),
            // 'unit_types'=> UnitType::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function addEducation(Request $request, Resume $id)
    {

        
        $validated = $request->validate([
            'Level' => 'required|string|max:255',
            'StartDate' => 'required|string|max:255',
            'EndDate' => 'required|string|max:255',
            'School' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Degree' => 'nullable|string|max:255',
            'Description' => 'nullable|string|max:255',
        ]);
    
        $education = $id->education()->create($validated);
    
    
   

    }


  public function addSkill(Request $request, Resume $id)
    {
    
        
        $validated = $request->validate([
            'Skill' => 'required|string|max:255',
        ]);
    
        $skill= $id->skill()->create($validated);
   

    }



    public function addExperience(Request $request, Resume $id)
    {

  
        $validated = $request->validate([
         
            'JobStarted' =>'required|date', 
            'JobEnded' =>'nullable|date', 
            'StillEmployed' => 'nullable|boolean',
            'Company' =>'required|string|max:255', 
            'Position' => 'required|string|max:255', 
            'Location' => 'required|string|max:255', 
            'LocationType' => 'required|string|max:255', 
            'EmploymentType' => 'required|string|max:255', 
            'Description' => 'required|string|max:255', 
        ]);
    

        $experience = $id->experience()->create($validated);
    
    
   

    }


   public function deleteExperience(Request $request, $id)
{
    try {
        $experience = Experience::findOrFail($id); // Find the experience by ID
        $experience->delete();
        
        return redirect()->route('resume-profile.show'); // Redirect to the appropriate route after deletion
    } catch (\Throwable $th) {
        // Handle the exception
        return back()->with('error', 'Unable to delete the experience.');
    }
}
    
    



    public function updatePFP(Request $request, Resume $id)
    {
        $validationRules = [
            'id' => 'required|numeric', // Define more rules as needed
        ];
          // Create a Validator instance and validate the $id parameter 
    $validator = Validator::make(['id' => $id->id], $validationRules);

    // Check if validation fails
    if ($validator->fails()) {
        // Handle validation failure
        return response()->json(['error' => 'Invalid ID value'], 400);
    }
        // Retrieve the old image path
        $oldImagePath = $id->Image;
     
    
        if ($request->hasFile('Image')) {
            $validateImage = $request->validate(['Image' => 'image']); // 'image' rule for image validation
    
            $image = $validateImage['Image'];
            $image->storeAs('public/images', $image->getClientOriginalName());
            $path = 'storage/images/' . $image->getClientOriginalName();
    
            // Delete the old image if it exists
            if ($oldImagePath && file_exists(public_path($oldImagePath))) {
                unlink(public_path($oldImagePath));
            }
        } else {
            $noImage = $request->validate([
                'image' => 'required|string',
            ]);
    
            // You might want to set the path to null or handle it differently
            $path = null;
    
            // Delete the old image if it exists
            if ($oldImagePath && file_exists(public_path($oldImagePath))) {
                unlink(public_path($oldImagePath));
            }
        }
    
        $id->update([
            'Image' => $path,
        ]);
    }
    
    public function updateHead(Request $request, Resume $id)
    {
        

        // dd($request->all(), $id);
      // Define validation rules for the $id parameter
      $validationRules = [
        'id' => 'required|numeric', // Define more rules as needed
    ];

    // Create a Validator instance and validate the $id parameter 
    $validator = Validator::make(['id' => $id->id], $validationRules);

    // Check if validation fails
    if ($validator->fails()) {
        // Handle validation failure
        return response()->json(['error' => 'Invalid ID value'], 400);
    }

    // If the validation passes, you can proceed with your update logic
    // $id is valid and can be used
   
    $validated = $request->validate([
        'DesiredPosition' => 'required|string|max:255',
        'CareerObjective' => 'required|string|max:255',
        'FirstName' => 'required|string|max:255',
        'MiddleName' => 'required|string|max:255',
        'LastName' => 'required|string|max:255',
    ]);

    $id->update([
        'DesiredPosition' => $validated['DesiredPosition'],
        'LastName' => $validated['LastName'],
        'FirstName' => $validated['FirstName'],
        'MiddleName' => $validated['MiddleName'],
        'CareerObjective' => $validated['CareerObjective'],  
    ]);
   
    }

    public function updateContact(Request $request, Resume $id)
    {
        
       
        // dd($request->all(), $id);
      // Define validation rules for the $id parameter
      $validationRules = [
        'id' => 'required|numeric', // Define more rules as needed
    ];

    // Create a Validator instance and validate the $id parameter 
    $validator = Validator::make(['id' => $id->id], $validationRules);

    // Check if validation fails
    if ($validator->fails()) {
        // Handle validation failure
        return response()->json(['error' => 'Invalid ID value'], 400);
    }

    // If the validation passes, you can proceed with your update logic
    // $id is valid and can be used
   
    $validated = $request->validate([
        'PhoneNumber' => 'required|string|max:255',
        'Email' => 'required|string|max:255',
        'Address' => 'required|string|max:255',
        
    ]);

    $id->update([
        'PhoneNumber' => $validated['PhoneNumber'],
        'Email' => $validated['Email'],
        'Address' => $validated['Address'],
    ]);
        


   
    }





    public function deleteSkill(Request $request,  $id)
    {
        try {
            $skill = Skill::findOrFail($id); // Assuming 'Skill' is the correct model name
            
            $skill->delete();
    
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
      
        // dd($request->toArray());
         

        try{
            $validated = $request -> validate([
                
                'Image' => 'required|image',
                'Gender' => 'required|string|max:255',
                'Citizenship' => 'required|string|max:255',
                'DesiredPosition' => 'required|string|max:255',
                'LastName' => 'required|string|max:255',
                'FirstName' => 'required|string|max:255',
                'MiddleName' => 'required|string|max:255',
                'Suffix' => 'nullable|string|max:3',
                'Age' => 'required|string|max:255',
                'Weight' => 'required|numeric|between:0,99.99',
                'Height' => 'required|numeric|between:0,99.99',

                'BirthDate' => 'required|date_format:Y-m-d',

                'BirthPlace' => 'required|string|max:144',
                'BloodType' => 'required|string|max:2',
                'CivilStatus' => 'required|string|max:255',
                'Address' => 'required|string|max:255',

                'PhoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',

                
                'Email' => 'required|string|max:255',
                'CareerObjective' => 'required|string|max:500',


                "Skill"    => "nullable|array|",
                "Skill.*"  => "nullable|distinct",

                "Education"    => "nullable|array|",
                "Education.*"  => "nullable|distinct",

                "Experience"    => "nullable|array|",
                "Experience.*"  => "nullable|distinct",
       
            ]);
               
            // dd($validated);

            if ($request->hasFile('Image')) {
                $validateImage=$request->validate(['Image'=>'Image']);
                $image = $validateImage['Image']; // get the uploaded file
                $image->storeAs('public/images',$image->getClientOriginalName()); // store the image in the storage public/images directory
                $ImagePath = 'storage/images/'.$image->getClientOriginalName();
            } 

          
            
            else {
                  //Problem is here, Even when the checkbox is clicked it will still upload the old image..... Now fixed 17/04/2023
        
                // if no image is uploaded, use the existing image path or set it to null
                $noImage=$request->validate([
                    'image' => 'nullable|string', // add the nullable rule
                ]);
                $ImagePath = $noImage['image']; // use the existing image path or set it to null
            }
    
            
            try{

                if(empty($validated['Suffix'])){
                    $Suffix = null;
                }
                else{
                    $Suffix= $validated['Suffix'];
                }
            }
            catch(\throwable $th){
                throw $th;

            }
       
           $resume = Resume::create([

         
                'user_id' => $userId,
                
                'Image' => $ImagePath,
                'Gender' => $validated['Gender'],
                'Citizenship' => $validated['Citizenship'],
                'DesiredPosition' => $validated['DesiredPosition'],
                'LastName' => $validated['LastName'],
                'FirstName' => $validated['FirstName'],
                'MiddleName' => $validated['MiddleName'],
                'Suffix' => $Suffix,
                
                'Age' => $validated['Age'],
                'BirthDate' => $validated['BirthDate'],
                'BirthPlace' => $validated['BirthPlace'],
                'BloodType' => $validated['BloodType'],
                'CivilStatus' => $validated['CivilStatus'],
                'Address' => $validated['Address'],
                'PhoneNumber' => $validated['PhoneNumber'],
                'Email' => $validated['Email'],
                'CareerObjective' => $validated['CareerObjective'],
                'Weight' => $validated['Weight'],
                'Height' => $validated['Height'],

              
               
            ]);
                
                        // Whenever life gets you down
                        // Get the ID of the created Resume record
                        
                        $resumeId = $resume->id;

                if (!empty($validated['Skill'])) {
                    foreach ($validated['Skill'] as $skillArray) {
                        foreach ($skillArray as $value) {
                            Skill::create([
                                'rsm_id' => $resumeId,
                                'Skill' => $value, 
                            ]);
                        }
                    }
                }
                        
                if(!empty ($validated['Education'])){

                    foreach ($validated['Education'] as $EducationArray) {
                        $degree = isset($EducationArray['Degree']) ? $EducationArray['Degree'] : null;
                        $description = isset($EducationArray['Description']) ? $EducationArray['Description'] : null;
                            Education::create([
                                'rsm_id' => $resumeId,
                                'Level' => $EducationArray['Level'], 
                                'StartDate' => $EducationArray['StartDate'], 
                                'EndDate' => $EducationArray['EndDate'], 
                                'School' => $EducationArray['School'], 
                                'Address' => $EducationArray['Address'], 
                                'Degree' => $degree, 
                            'Description' => $description, 
                            ]);
                    }
                }

                if(!empty($validated['Experience'])) {

                    foreach ($validated['Experience'] as $ExperienceArray) {
                        $Description = isset($ExperienceArray['Description']) ? $ExperienceArray['Description'] : null;
                   
                            Experience::create([
                                'rsm_id' => $resumeId,
                                'JobStarted' => $ExperienceArray['JobStarted'], 
                                'JobEnded' => $ExperienceArray['JobEnded'], 
                                'StillEmployed' => $ExperienceArray['StillEmployed'], 
                                'Company' => $ExperienceArray['Company'], 
                                'Position' => $ExperienceArray['Position'], 
                                'Location' => $ExperienceArray['Location'], 
                                'LocationType' => $ExperienceArray['LocationType'], 
                                'EmploymentType' => $ExperienceArray['EmploymentType'], 
                                'Description' => $Description, 
                            ]);
                    }


                }
                $education = Education::where('rsm_id', $resume->id)->get();
                $skills = Skill::where('rsm_id', $resume->id)->get();
                $experiences = Experience::where('rsm_id', $resume->id)->get();
            
                return Inertia::render('Dashboard/Jobseeker-Page/Resume-Profile', [
                    'resume' => $resume,
                    'education' => $education,
                    'skills' => $skills,
                    'experiences' => $experiences,
                ]);         

                    


          
        }
        catch (\Throwable $th) {
            throw $th;
          
        }
      
   
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
     $user = Auth::user();
    $resume = Resume::where('user_id', $user->id)->first();
    if (!$resume) {
        return Inertia::render('Dashboard/Jobseeker-Page/Resume-Build', [
            // Include any other data needed
        ]);
    }
    // Load related data (education, skills, experiences) for the resume
    $education = Education::where('rsm_id', $resume->id)->get();
    $skills = Skill::where('rsm_id', $resume->id)->get();
    $experiences = Experience::where('rsm_id', $resume->id)->get();

    return Inertia::render('Dashboard/Jobseeker-Page/Resume-Profile', [
        'resume' => $resume,
        'education' => $education,
        'skills' => $skills,
        'experiences' => $experiences,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
