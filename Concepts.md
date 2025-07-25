# Core Concepts of the Dabbawala Tiffin Service Project

## Object
- **User**: Represents a customer or admin who interacts with the system.
- **Product (Tiffin)**: Represents a meal/tiffin available for order.
- **Cart**: Temporary storage for products a user intends to purchase.
- **Order**: Represents a completed purchase (implied by cart and buy flow).
- **Address**: Delivery location for orders.
- **Admin**: Special user with privileges to manage products and view admin galleries.

## Context
- **Authentication**: Users must register and log in to access personalized features (profile, cart, order).
- **Session Management**: Used for storing authentication state and cart contents.
- **Product Management**: Admins can upload, edit, and delete products (tiffins) with images and prices.
- **Cart Operations**: Users can add, remove, and view products in their cart before purchasing.
- **Profile Management**: Users can view and update their personal information.
- **Address Management**: Users can add and manage delivery addresses.
- **Email Notifications**: System sends emails on successful signup and possibly other actions.
- **PDF/Excel Export**: Admins can export user/product data for reporting or backup.

## Information Important as per the Context
- **User Credentials**: Name, Email, Phone, Password (hashed, but currently using MD5).
- **Product Details**: Name, Price, Image, and unique ID.
- **Cart Data**: Product IDs, quantities, and associated user session.
- **Order Data**: (Implied) - Products ordered, user, address, and status.
- **Address Details**: Street, city, and other delivery information.
- **Admin Actions**: Product uploads, gallery management, data export.
- **Session Variables**: Used for tracking logged-in user and cart contents.
- **Uploaded Files**: Product images stored in a public directory.
- **Exported Files**: PDFs and Excel files generated for reporting.

---

This list summarizes the main objects, their context, and the critical information handled by the Dabbawala Tiffin Service Laravel project. 