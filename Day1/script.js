const Display = () => {
  try {
    window.location.href = "seeing.php";
  } catch (err) {
    console.error("Redirect failed:", err);
    // Optional fallback: show message or use location.replace()
    // window.location.replace("seeing.php");
  }
};

// To actually trigger it:
// Display();