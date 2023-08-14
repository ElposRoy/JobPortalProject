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
class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

 

    public function index(): Response
    {
        
        return Inertia::render('Dashboard/Jobseeker-Page/Resume-Build', [
            
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
      


        try{
            $validated = $request -> validate([
                
                'Image' => 'required|image',
                'Gender' => 'required|string|max:255',
                'Citizenship' => 'required|string|max:255',
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
                'CareerObjective' => 'required|string|max:255',


                "Skill"    => "nullable|array|",
                "Skill.*"  => "nullable|distinct",

                "Education"    => "nullable|array|",
                "Education.*"  => "nullable|distinct",

                "Experience"    => "nullable|array|",
                "Experience.*"  => "nullable|distinct",
       
            ]);

         

            if ($request->hasFile('Image')) {
                $validateImage=$request->validate(['Image'=>'Image']);
                $image = $validateImage['Image']; // get the uploaded file
                $image->storeAs('images',$image->getClientOriginalName()); // store the image in the storage public/images directory
                $ImagePath = 'storage/public/images/'.$image->getClientOriginalName();
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
