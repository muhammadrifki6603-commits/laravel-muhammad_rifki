public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}

public function update(Request $request, Student $student)
{
    $request->validate([
        'npm' => 'required|unique:students,npm,' . $student->id,
        'name' => 'required|string|max:255',
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|in:L,P',
        'alamat' => 'required|string',
        'program_studi' => 'required|string|max:255',
        'no_hp' => 'required|string|max:20',
        'email' => 'required|email|unique:students,email,' . $student->id,
    ]);

    $student->update($request->all());

    return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil diperbarui!');
}

public function destroy(Student $student)
{
    $student->delete();

    return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil dihapus!');
}